access(all) contract BountyContract {
    access(all) var bounties: {Address: Bounty}
    access(all) var totalBounties: UInt64

    access(all) struct Bounty {
        access(all) let id: UInt64
        access(all) let amount: UFix64
        access(all) let creator: Address
        access(all) let isPublic: Bool
        access(all) let deadline: UFix64
        access(all) let remainingBounties: UInt64

        init(
            id: UInt64,
            amount: UFix64,
            creator: Address,
            isPublic: Bool,
            deadline: UFix64,
            remainingBounties: UInt64
        ) {
            self.id = id
            self.amount = amount
            self.creator = creator
            self.isPublic = isPublic
            self.deadline = deadline
            self.remainingBounties = remainingBounties
        }
    }

    init() {
        self.bounties = {}
        self.totalBounties = 0
    }

    access(all) fun createBounty(
        amount: UFix64,
        isPublic: Bool,
        deadline: UFix64,
        remainingBounties: UInt64
    ) {
        let newBounty = Bounty(
            id: self.totalBounties,
            amount: amount,
            creator: self.account.address,
            isPublic: isPublic,
            deadline: deadline,
            remainingBounties: remainingBounties
        )

        self.bounties[self.account.address] = newBounty
        self.totalBounties = self.totalBounties + 1
    }

    access(all) fun getBounty(address: Address): Bounty? {
        return self.bounties[address]
    }
}